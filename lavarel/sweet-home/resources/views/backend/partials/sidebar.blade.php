<div>
    <h2 class="text-center mt-4">Sweet Home</h2>
    <hr>
    <a href="{{ route('admin') }}"><i class="fa-solid fa-house"></i> Home</a>
    
    <div class="dropdown">
        <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-store"></i> Store</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('product.index') }}">Product</a></li>
            <li><a class="dropdown-item" href="{{ route('category.index') }}">Category</a></li>
        </ul>
    </div>
</div>
