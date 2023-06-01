<span id="like-{{ $product->id }}" class="like" onclick="toggleLike('{{ $product->id }}')"></span>

@push('scripts')
  <script>
    function toggleLike(id) {
      const likeButton = document.getElementById('like-' + id)
      likeButton.classList.toggle('like-set')
      favorites.toggleFavorite(id)
    }
    document.addEventListener('DOMContentLoaded', () => {
      favorites.items.forEach(item => {
        const likeButton = document.getElementById('like-' + item)
        if (likeButton)
          likeButton.classList.add('like-set')
      })
    })
  </script>
@endpush
