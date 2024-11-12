<style>
header {
    background-color: #1a1c1e;
    color: #fff;
    padding: 20px 0;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.logo img {
    max-height: 40px;
}

nav ul {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-right: 30px;
}

nav ul li a {
    color: #b3b3b3;
    text-decoration: none;
}

nav ul li a:hover {
    color: #fff;
}

.header-actions {
    display: flex;
    align-items: center;
}

.search-container {
    position: relative;
    margin-right: 20px;
}

.search-input {
    background-color: #2c2e30;
    border: none;
    color: #b3b3b3;
    padding: 8px 30px 8px 12px;
    border-radius: 4px;
    width: 200px;
}

.search-btn {
    position: absolute;
    top: 50%;
    right: 8px;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    color: #b3b3b3;
    cursor: pointer;
}

.cart-icon,
.sign-in-icon {
    color: #b3b3b3;
    font-size: 24px;
    margin-left: 20px;
    text-decoration: none;
}

.cart-icon:hover,
.sign-in-icon:hover {
    color: #fff;
}
</style>
<header>
    <div class="header-container">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/carly-rent-logo.png') }}" alt="Carly Rent">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/vehicles') }}">Vehicles</a></li>
                <li><a href="{{ url('/location') }}">Location</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div class="header-actions">
            <div class="search-container">
                <input type="text" placeholder="Search..." class="search-input">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>
            <a href="{{ url('/cart') }}" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <a href="#" class="sign-in-icon">
                <i class="fas fa-user"></i>
            </a>
        </div>
    </div>
</header>