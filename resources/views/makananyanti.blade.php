@extends('layoutyanti')

@section('content')
<div class="food-container">
    <!-- bagian utama -->
    <section class="food-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Makanan Favorite</h1>
            <p class="subtitle">Makan enak itu moodboster banget</p>
        </div>
    </section>

    <!-- kategori makanan-->
    <section class="categories-section">
        <h2 class="section-title">Kategori Favorit</h2>
        <div class="categories-grid">
            <div class="category-card" style="background-image: url('/img/makanansehat.jpg')">
                <div class="category-overlay"></div>
                <h3>Fish And Chips</h3>
            </div>
            <div class="category-card" style="background-image: url('/img/makanan1.jpg')">
                <div class="category-overlay"></div>
                <h3>Aglio e Olio</h3>
            </div>
            <div class="category-card" style="background-image: url('/img/dessert.jpg')">
                <div class="category-overlay"></div>
                <h3>Dessert</h3>
            </div>
            <div class="category-card" style="background-image: url('/img/makanan3.jpg')">
                <div class="category-overlay"></div>
                <h3>Marugame the best</h3>
            </div>
        </div>
    </section>

    <!-- makanan favorit -->
    <section class="favorites-section">
        <h2 class="section-title">Top 5 Makanan Favorit</h2>
        <div class="food-grid">
            <!-- makanan 1 -->
            <div class="food-card">
                <div class="food-img" style="background-image: url('/img/makanan2.jpg')">
                    <span class="food-rank">1</span>
                </div>
                <div class="food-info">
                    <h3>Aglio E Olio</h3>
                    <div class="food-meta">
                        <span class="food-category"><i class="fas fa-leaf"></i> Pasta</span>
                        <span class="food-rating"><i class="fas fa-star"></i> 5.0</span>
                    </div>
                    <p class="food-desc">Inituh pasta creamy sama pedes dikit, bisa di mix dengan ayam atau beef.</p>
                    <div class="food-tags">
                        <span>Spicy</span>
                        <span>Italian</span>
                    </div>
                </div>
            </div>

            <!-- makanan 2 -->
            <div class="food-card">
                <div class="food-img" style="background-image: url('/img/matcha.jpg')">
                    <span class="food-rank">2</span>
                </div>
                <div class="food-info">
                    <h3>Matcha for lovee</h3>
                    <div class="food-meta">
                        <span class="food-category"><i class="fas fa-utensils"></i> Minuman</span>
                        <span class="food-rating"><i class="fas fa-star"></i> 4.9</span>
                    </div>
                    <p class="food-desc">Bintang 1000 buat matcha, gaada yang bisa seenak matcha.</p>
                    <div class="food-tags">
                        <span>Comfort Drink</span>
                        <span>Sweet</span>
                    </div>
                </div>
            </div>
</div>
@endsection

@section('styles')
<style>
    /* Base Styles */
    .food-container {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .section-title {
        text-align: center;
        font-size: 2rem;
        margin: 40px 0;
        color: #2c3e50;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: #e74c3c;
        margin: 15px auto;
    }

    /* bagian utama */
    .food-hero {
        height: 400px;
        background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 50px;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        padding: 20px;
    }

    .food-hero h1 {
        font-size: 3.5rem;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .subtitle {
        font-size: 1.3rem;
        max-width: 700px;
        margin: 0 auto;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    /* kategori makanan */
    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 50px;
    }

    .category-card {
        height: 200px;
        background-size: cover;
        background-position: center;
        border-radius: 10px;
        position: relative;
        display: flex;
        align-items: flex-end;
        padding: 20px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .category-card:hover {
        transform: translateY(-10px);
    }

    .category-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        border-radius: 10px;
    }

    .category-card h3 {
        position: relative;
        z-index: 2;
        color: white;
        font-size: 1.5rem;
        margin: 0;
    }

    /* makanan favorit */
    .food-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }

    .food-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .food-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .food-img {
        height: 200px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .food-rank {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #e74c3c;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .food-info {
        padding: 20px;
    }

    .food-info h3 {
        margin-top: 0;
        margin-bottom: 10px;
        color: #2c3e50;
        font-size: 1.4rem;
    }

    .food-meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        color: #7f8c8d;
    }

    .food-category i, .food-rating i {
        margin-right: 5px;
        color: #e74c3c;
    }

    .food-desc {
        margin-bottom: 15px;
        color: #34495e;
    }

    .food-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .food-tags span {
        background: #f5f5f5;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        color: #7f8c8d;
    }

</style>
@endsection

@section('scripts')
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@endsection