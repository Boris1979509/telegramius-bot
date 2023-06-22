<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartService
{
  private $sessionKey;

  public function __construct()
  {
    $this->sessionKey = 'cart';
  }

  /**
   * Загрузить товары из сессии.
   *
   * @return array
   */
  private function loadItemsFromSession()
  {
    return Session::get($this->sessionKey, []);
  }

  /**
   * Добавить товар в корзину.
   *
   * @return void
   */
  public function addItem(Request $request)
  {
    $items = $this->loadItemsFromSession();
    $id = $request->input('id');
    $qty = $request->input('qty');

    $existingItemKey = collect($items)
      ->search(function ($item) use ($id) {
        return $item['id'] == $id;
      });

    if ($existingItemKey !== false) {
      $items[$existingItemKey]['qty'] += $qty;
    } else {
      $items[] = ['id' => $id, 'qty' => $qty];
    }

    $this->saveItemsToSession($items);
  }

  /**
   * Удалить товар из корзины.
   *
   * @return void
   */
  public function removeItem(Request $request)
  {
    $items = $this->loadItemsFromSession();
    $id = $request->input('id');

    $itemIndex = collect($items)->search(function ($item) use ($id) {
      return $item['id'] == $id;
    });

    if ($itemIndex !== false) {
      $currentItem = $items[$itemIndex];

      if ($currentItem['qty'] > 1) {
        $items[$itemIndex]['qty']--;
      } else {
        unset($items[$itemIndex]);
      }
    }

    $this->saveItemsToSession($items);
  }

  /**
   * Удалить товар из корзины по идентификатору.
   *
   * @return void
   */
  public function removeItemById(Request $request)
  {
    $items = $this->loadItemsFromSession();
    $id = $request->input('id');

    $itemIndex = collect($items)->search(function ($item) use ($id) {
      return $item['id'] == $id;
    });

    if ($itemIndex !== false) {
      unset($items[$itemIndex]);
    }

    $this->saveItemsToSession($items);
  }

  /**
   * Поиск в корзине
   */
  public function findItem(int $id)
  {
    $items = $this->loadItemsFromSession();
    return collect($items)->contains('id', $id);
  }

  /**
   * Сохранить товары в сессии.
   *
   * @param array $items Массив товаров.
   * @return void
   */
  private function saveItemsToSession(array $items)
  {
    Session::put($this->sessionKey, $items);
  }

  /**
   * Получить все элементы корзины.
   *
   * @return array
   */
  public function getItems()
  {
    return $this->loadItemsFromSession();
  }
}
