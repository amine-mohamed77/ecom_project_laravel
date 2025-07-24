@extends('layouts.auth')

@section('content')
<style>
    /* Professional Shopping Cart Styles */
    .cart-container {
        background-color: #f8f9fa;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .cart-header {
        background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        color: white;
        padding: 2rem;
        border-radius: 12px;
        margin-bottom: 2rem;
        box-shadow: 0 8px 25px rgba(44, 62, 80, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .cart-header h2 {
        margin: 0;
        font-weight: 600;
        font-size: 2.2rem;
        letter-spacing: -0.5px;
    }

    .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
        border-radius: 8px;
        padding: 1rem 1.5rem;
        margin-bottom: 1.5rem;
        font-weight: 500;
        box-shadow: 0 2px 10px rgba(21, 87, 36, 0.1);
    }

    .empty-cart {
        background: white;
        padding: 4rem 2rem;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e9ecef;
    }

    .empty-cart p {
        font-size: 1.1rem;
        color: #6c757d;
        margin: 0;
        font-weight: 500;
    }

    .cart-table-container {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e9ecef;
        margin-bottom: 2rem;
    }

    .table {
        margin: 0;
        border: none;
    }

    .table thead th {
        background-color: #495057;
        color: white;
        border: none;
        padding: 1.25rem 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.875rem;
        border-bottom: 2px solid #343a40;
    }

    .table tbody tr {
        transition: background-color 0.2s ease;
        border: none;
    }

    .table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .table tbody td {
        padding: 1.5rem 1rem;
        vertical-align: middle;
        border: none;
        border-bottom: 1px solid #e9ecef;
    }

    .product-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid #e9ecef;
        transition: transform 0.2s ease;
    }

    .product-image:hover {
        transform: scale(1.05);
        border-color: #007bff;
    }

    .product-name {
        font-weight: 600;
        color: #2c3e50;
        font-size: 1rem;
        line-height: 1.4;
    }

    .price-text {
        font-weight: 700;
        color: #28a745;
        font-size: 1.1rem;
    }

    .quantity-form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.75rem;
    }

    .quantity-input {
        width: 70px;
        border-radius: 6px;
        border: 2px solid #dee2e6;
        text-align: center;
        font-weight: 600;
        padding: 0.5rem;
        transition: border-color 0.2s ease;
        font-size: 0.9rem;
    }

    .quantity-input:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        outline: none;
    }

    .btn-update {
        background-color: #007bff;
        border: 1px solid #007bff;
        border-radius: 6px;
        padding: 0.5rem 1rem;
        font-weight: 600;
        color: white;
        font-size: 0.875rem;
        transition: all 0.2s ease;
    }

    .btn-update:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        color: white;
        transform: translateY(-1px);
    }

    .btn-remove {
        background-color: #dc3545;
        border: 1px solid #dc3545;
        border-radius: 6px;
        padding: 0.5rem 1rem;
        font-weight: 600;
        color: white;
        font-size: 0.875rem;
        transition: all 0.2s ease;
    }

    .btn-remove:hover {
        background-color: #c82333;
        border-color: #c82333;
        color: white;
        transform: translateY(-1px);
    }

    .table tfoot th {
        background-color: #f8f9fa;
        color: #2c3e50;
        font-weight: 700;
        font-size: 1.1rem;
        padding: 1.5rem 1rem;
        border: none;
        border-top: 2px solid #dee2e6;
    }

    .total-amount {
        color: #28a745;
        font-size: 1.3rem;
        font-weight: 800;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 2rem;
    }

    .btn-continue {
        background-color: #6c757d;
        border: 1px solid #6c757d;
        border-radius: 8px;
        padding: 0.875rem 2rem;
        font-weight: 600;
        color: white;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
    }

    .btn-continue:hover {
        background-color: #5a6268;
        border-color: #5a6268;
        color: white;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(108, 117, 125, 0.3);
    }

    .btn-checkout {
        background-color: #28a745;
        border: 1px solid #28a745;
        border-radius: 8px;
        padding: 0.875rem 2rem;
        font-weight: 600;
        color: white;
        text-decoration: none;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
    }

    .btn-checkout:hover {
        background-color: #218838;
        border-color: #218838;
        color: white;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    }

    .subtotal-amount {
        font-weight: 700;
        color: #007bff;
        font-size: 1rem;
    }

    /* Professional spacing and typography */
    .container {
        max-width: 1200px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .cart-container {
            padding: 1rem 0;
        }

        .cart-header {
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .cart-header h2 {
            font-size: 1.8rem;
        }

        .action-buttons {
            flex-direction: column;
            gap: 0.75rem;
        }

        .btn-continue,
        .btn-checkout {
            text-align: center;
            justify-content: center;
            padding: 1rem 1.5rem;
        }

        .quantity-form {
            flex-direction: column;
            gap: 0.5rem;
        }

        .quantity-input {
            width: 60px;
        }

        .table tbody td {
            padding: 1rem 0.5rem;
        }

        .product-image {
            width: 60px;
            height: 60px;
        }
    }

    @media (max-width: 576px) {
        .cart-header h2 {
            font-size: 1.5rem;
        }

        .table thead th {
            padding: 1rem 0.5rem;
            font-size: 0.75rem;
        }

        .product-name {
            font-size: 0.9rem;
        }

        .price-text,
        .subtotal-amount {
            font-size: 0.95rem;
        }
    }
</style>

<div class="cart-container">
    <div class="container py-5">
        <div class="cart-header">
            <h2 class="mb-0">🛒 Shopping Cart</h2>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($cartItems->isEmpty())
            <div class="empty-cart">
                <p class="text-muted">Your cart is currently empty.</p>
            </div>
        @else
            <div class="cart-table-container">
                <div class="table-responsive">
                    <table class="table table-striped text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach ($cartItems as $item)
                                @php
                                    $subtotal = $item->product->price * $item->quantity;
                                    $total += $subtotal;
                                @endphp
                                <tr>
                                    <td>
                                        <img src="{{ asset($item->product->imagepath) }}" alt="{{ $item->product->name }}" class="product-image">
                                    </td>
                                    <td class="product-name">{{ $item->product->name }}</td>
                                    <td class="price-text">MAD {{ number_format($item->product->price, 2) }}</td>
                                    <td>
                                        <form action="{{ route('cart.update', $item->id) }}" method="POST" class="quantity-form">
                                            @csrf
                                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control form-control-sm quantity-input">
                                            <button type="submit" class="btn btn-sm btn-outline-primary btn-update">Update</button>
                                        </form>
                                    </td>
                                    <td class="subtotal-amount">MAD {{ number_format($subtotal, 2) }}</td>
                                    <td>
                                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure you want to remove this item?')" class="btn btn-sm btn-danger btn-remove">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="table-light">
                            <tr>
                                <th colspan="4">Total</th>
                                <th colspan="2" class="total-amount">MAD {{ number_format($total, 2) }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        @endif

        <div class="action-buttons">
            <a href="{{ url('/') }}" class="btn-continue">⬅️ Continue Shopping</a>
            <a href="#" class="btn-checkout">Checkout</a> {{-- Placeholder for future checkout --}}
        </div>
    </div>
</div>
@endsection
