<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Component;

class HomeController extends BaseController
{
    public function __invoke(Request $request)
    {
        $currentStore = $request->currentStore;
        $templates = $this->getTemplates($currentStore->tele_shop_id);

        $components = collect($templates->template)->map(function ($item) {
            $item = Component::find($item['id']);
            $item->show = $item->show;
            $item->images = $item->files()->orderBy('rank')->get();
            $item->products = $item->products()->orderByPivot('position', 'asc')->get();
            $item->categories = $item->categories()->orderByPivot('position', 'asc')->get();
            return $item;
        });
        $templates = collect($templates->template)->sortBy('position'); // orders layout
        return view('pages.home', compact('currentStore', 'templates', 'components'));
    }

    private function getTemplates($shop_id)
    {
        $templates = Template::where('tele_shop_id', $shop_id)->first();
        if ($templates) {
            return $templates;
        }
        return null;
    }
}
