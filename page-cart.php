<?php
/*
Template Name: Panier
Description: Page du panier d'achat
*/
get_header();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    :root {
        --primary-color: #0C4178;
        --accent-color: #FFD700;
        --text-color: #333;
        --background-color: #fff;
        --light-grey: #f5f5f5;
        --border-color: #ddd;
        --primary-blue: #0C4178;
        --dark-blue: #0c4178;
        --gold: #FFD700;
        --accent-yellow: #FFD700;
        --orange: #FFA500;
        --white: #ffffff;
        --light-gray: #f9f9f9;
        --text-dark: #333333;
        --success-green: #28a745;
        --danger-red: #dc3545;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .cart-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
        background: var(--white);
    }

    .cart-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .cart-title {
        font-size: 36px;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 10px;
        font-family: Fredoka, sans-serif;
    }

    .cart-subtitle {
        color: var(--text-dark);
        font-size: 16px;
        opacity: 0.8;
    }

    .cart-empty {
        text-align: center;
        padding: 60px 20px;
        background: var(--light-gray);
        border-radius: 15px;
        margin-bottom: 30px;
    }

    .cart-empty-icon {
        font-size: 64px;
        color: var(--primary-blue);
        margin-bottom: 20px;
        opacity: 0.5;
    }

    .cart-empty-title {
        font-size: 24px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 10px;
    }

    .cart-empty-text {
        color: var(--text-dark);
        opacity: 0.7;
        margin-bottom: 30px;
    }

    .btn-continue-shopping {
        background: linear-gradient(135deg, var(--accent-yellow), #FFB800);
        color: var(--primary-blue);
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }

    .btn-continue-shopping:hover {
        background: linear-gradient(135deg, #FFB800, var(--accent-yellow));
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 215, 0, 0.4);
        text-decoration: none;
    }

    .cart-content {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
        margin-bottom: 40px;
    }

    .cart-items {
        background: var(--white);
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .cart-item {
        display: grid;
        grid-template-columns: 120px 1fr auto;
        gap: 20px;
        padding: 20px;
        border-bottom: 1px solid var(--border-color);
        align-items: center;
    }

    .cart-item:last-child {
        border-bottom: none;
    }

    .cart-item-image {
        width: 120px;
        height: 120px;
        border-radius: 10px;
        overflow: hidden;
        background: var(--light-gray);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cart-item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-item-info {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .cart-item-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--text-dark);
        line-height: 1.3;
    }

    .cart-item-category {
        font-size: 14px;
        color: var(--primary-blue);
        font-weight: 500;
    }

    .cart-item-price {
        font-size: 20px;
        font-weight: 700;
        color: var(--primary-blue);
    }

    .cart-item-original-price {
        font-size: 14px;
        color: #999;
        text-decoration: line-through;
        margin-right: 8px;
    }

    .cart-item-promo-price {
        font-size: 20px;
        font-weight: 700;
        color: var(--accent-yellow);
    }

    .cart-item-actions {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: flex-end;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--light-gray);
        border-radius: 8px;
        padding: 4px;
    }

    .quantity-btn {
        background: var(--white);
        border: 2px solid var(--primary-blue);
        width: 32px;
        height: 32px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 700;
        color: var(--primary-blue);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .quantity-btn:hover {
        background: var(--primary-blue);
        color: var(--white);
        transform: scale(1.05);
    }

    .quantity-display {
        min-width: 40px;
        text-align: center;
        font-weight: 600;
        color: var(--text-dark);
    }

    .remove-item {
        background: transparent;
        border: 2px solid var(--danger-red);
        color: var(--danger-red);
        cursor: pointer;
        font-size: 14px;
        padding: 6px 12px;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .remove-item:hover {
        background: var(--danger-red);
        color: var(--white);
        transform: translateY(-1px);
    }

    .cart-summary {
        background: var(--white);
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        padding: 30px;
        height: fit-content;
        position: sticky;
        top: 20px;
    }

    .summary-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--light-gray);
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 16px;
    }

    .summary-label {
        color: var(--text-dark);
        font-weight: 500;
    }

    .summary-value {
        font-weight: 600;
        color: var(--text-dark);
    }

    .summary-total {
        font-size: 20px;
        font-weight: 700;
        color: var(--primary-blue);
        border-top: 2px solid var(--light-gray);
        padding-top: 15px;
        margin-top: 15px;
    }

    .btn-checkout {
        background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
        color: var(--white);
        border: none;
        padding: 15px 30px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-checkout:hover {
        background: linear-gradient(135deg, var(--dark-blue), var(--primary-blue));
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(12, 65, 120, 0.3);
    }

    .btn-checkout:disabled {
        background: var(--light-gray);
        color: var(--text-dark);
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .cart-content {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .cart-item {
            grid-template-columns: 80px 1fr;
            gap: 15px;
        }

        .cart-item-image {
            width: 80px;
            height: 80px;
        }

        .cart-item-actions {
            grid-column: 1 / -1;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .cart-title {
            font-size: 28px;
        }
    }
</style>

<div class="cart-container">
    <div class="cart-header">
        <h1 class="cart-title">Mon Panier</h1>
        <p class="cart-subtitle">Vérifiez vos articles avant de finaliser votre commande</p>
    </div>

    <div id="cart-content">
        <!-- Le contenu du panier sera injecté ici via JavaScript -->
    </div>
</div>

<script>
// Gestion du panier avec localStorage
class Cart {
    constructor() {
        this.items = this.loadCart();
        this.init();
    }

    loadCart() {
        const cart = localStorage.getItem('ortoc_cart');
        return cart ? JSON.parse(cart) : [];
    }

    saveCart() {
        localStorage.setItem('ortoc_cart', JSON.stringify(this.items));
    }

    addItem(productId, productName, productPrice, productImage, productCategory, promoPrice = null) {
        const existingItem = this.items.find(item => item.id === productId);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.items.push({
                id: productId,
                name: productName,
                price: productPrice,
                promoPrice: promoPrice,
                image: productImage,
                category: productCategory,
                quantity: 1
            });
        }
        
        this.saveCart();
        this.updateDisplay();
        this.showNotification('Produit ajouté au panier !');
    }

    removeItem(productId) {
        this.items = this.items.filter(item => item.id !== productId);
        this.saveCart();
        this.updateDisplay();
        this.showNotification('Produit retiré du panier !');
    }

    updateQuantity(productId, newQuantity) {
        const item = this.items.find(item => item.id === productId);
        if (item) {
            if (newQuantity <= 0) {
                this.removeItem(productId);
            } else {
                item.quantity = newQuantity;
                this.saveCart();
                this.updateDisplay();
            }
        }
    }

    getTotal() {
        return this.items.reduce((total, item) => {
            const price = item.promoPrice || item.price;
            return total + (price * item.quantity);
        }, 0);
    }

    getSubtotal() {
        return this.items.reduce((total, item) => {
            return total + (item.price * item.quantity);
        }, 0);
    }

    getSavings() {
        return this.getSubtotal() - this.getTotal();
    }

    clearCart() {
        this.items = [];
        this.saveCart();
        this.updateDisplay();
    }

    updateDisplay() {
        const cartContent = document.getElementById('cart-content');
        
        if (this.items.length === 0) {
            cartContent.innerHTML = `
                <div class="cart-empty">
                    <div class="cart-empty-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h2 class="cart-empty-title">Votre panier est vide</h2>
                    <p class="cart-empty-text">Ajoutez des produits pour commencer vos achats</p>
                    <a href="${window.location.origin}/page-boutique-ortoc-test" class="btn-continue-shopping">
                        <i class="fas fa-arrow-left"></i>
                        Continuer les achats
                    </a>
                </div>
            `;
            return;
        }

        const itemsHtml = this.items.map(item => {
            const currentPrice = item.promoPrice || item.price;
            const priceDisplay = item.promoPrice ? 
                `<span class="cart-item-original-price">${this.formatPrice(item.price)} FCFA</span>
                 <span class="cart-item-promo-price">${this.formatPrice(item.promoPrice)} FCFA</span>` :
                `<span class="cart-item-price">${this.formatPrice(item.price)} FCFA</span>`;

            return `
                <div class="cart-item" data-product-id="${item.id}">
                    <div class="cart-item-image">
                        <img src="${item.image}" alt="${item.name}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; align-items: center; justify-content: center; width: 100%; height: 100%; color: #999; font-size: 12px;">Image non disponible</div>
                    </div>
                    <div class="cart-item-info">
                        <h3 class="cart-item-title">${item.name}</h3>
                        <p class="cart-item-category">${item.category}</p>
                        <div class="cart-item-price">
                            ${priceDisplay}
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <div class="quantity-controls">
                            <button class="quantity-btn" onclick="cart.updateQuantity(${item.id}, ${item.quantity - 1})">-</button>
                            <span class="quantity-display">${item.quantity}</span>
                            <button class="quantity-btn" onclick="cart.updateQuantity(${item.id}, ${item.quantity + 1})">+</button>
                        </div>
                        <button class="remove-item" onclick="cart.removeItem(${item.id})">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </div>
                </div>
            `;
        }).join('');

        const summaryHtml = `
            <div class="cart-summary">
                <h2 class="summary-title">Résumé de la commande</h2>
                <div class="summary-item">
                    <span class="summary-label">Sous-total</span>
                    <span class="summary-value">${this.formatPrice(this.getSubtotal())} FCFA</span>
                </div>
                ${this.getSavings() > 0 ? `
                <div class="summary-item">
                    <span class="summary-label">Économies</span>
                    <span class="summary-value" style="color: var(--success-green);">-${this.formatPrice(this.getSavings())} FCFA</span>
                </div>
                ` : ''}
                <div class="summary-item summary-total">
                    <span class="summary-label">Total</span>
                    <span class="summary-value">${this.formatPrice(this.getTotal())} FCFA</span>
                </div>
                <button class="btn-checkout" onclick="cart.checkout()">
                    <i class="fas fa-credit-card"></i>
                    Finaliser la commande
                </button>
            </div>
        `;

        cartContent.innerHTML = `
            <div class="cart-content">
                <div class="cart-items">
                    ${itemsHtml}
                </div>
                ${summaryHtml}
            </div>
        `;
    }

    formatPrice(price) {
        return new Intl.NumberFormat('fr-FR').format(price);
    }

    showNotification(message) {
        // Créer une notification temporaire
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--success-green);
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // Animation d'entrée
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Suppression automatique
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    checkout() {
        if (this.items.length === 0) {
            alert('Votre panier est vide !');
            return;
        }

        // Afficher un formulaire pour les infos utilisateur
        const formHtml = `
            <div id="checkout-modal" style="position:fixed;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.5);display:flex;align-items:center;justify-content:center;z-index:9999;">
                <form id="user-info-form" style="background:#fff;padding:30px;border-radius:12px;min-width:320px;box-shadow:0 8px 32px rgba(0,0,0,0.2);">
                    <h2 style="margin-bottom:20px;">Vos informations</h2>
                    <input type="text" name="name" placeholder="Nom complet" required style="width:100%;margin-bottom:10px;padding:8px;">
                    <input type="email" name="email" placeholder="Email" required style="width:100%;margin-bottom:10px;padding:8px;">
                    <input type="tel" name="phone" placeholder="Téléphone" required style="width:100%;margin-bottom:10px;padding:8px;">
                    <textarea name="message" placeholder="Message (optionnel)" style="width:100%;margin-bottom:10px;padding:8px;"></textarea>
                    <button type="submit" style="background:var(--primary-blue);color:#fff;padding:10px 20px;border:none;border-radius:6px;font-weight:700;">Envoyer la commande</button>
                    <button type="button" onclick="document.getElementById('checkout-modal').remove()" style="margin-left:10px;">Annuler</button>
                </form>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', formHtml);

        document.getElementById('user-info-form').onsubmit = (e) => {
            e.preventDefault();
            const form = e.target;
            const userInfo = {
                name: form.name.value,
                email: form.email.value,
                phone: form.phone.value,
                message: form.message.value,
            };
            fetch('send-order.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    user: userInfo,
                    cart: this.items
                })
            })
            .then(res => res.json())
            .then(data => {
                alert(data.success ? 'Commande envoyée ! Nous vous contacterons rapidement.' : 'Erreur lors de l\'envoi.');
                document.getElementById('checkout-modal').remove();
                if (data.success) this.clearCart();
            })
            .catch(() => {
                alert('Erreur lors de l\'envoi.');
                document.getElementById('checkout-modal').remove();
            });
        };
    }

    init() {
        this.updateDisplay();
        
        // Écouter les clics sur les boutons "Ajouter au panier"
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('btn-add-cart') || 
                e.target.classList.contains('btn-add-cart-detail')) {
                e.preventDefault();
                
                const button = e.target;
                const productId = parseInt(button.dataset.productId);
                const productCard = button.closest('.product-card, .product-info-detail');
                
                if (productCard) {
                    const productName = productCard.querySelector('.product-title, .product-title-detail')?.textContent?.trim() || 'Produit';
                    const priceElement = productCard.querySelector('.current-price, .promo-price, .current-price-detail, .promo-price-detail');
                    const originalPriceElement = productCard.querySelector('.original-price, .original-price-detail');
                    const imageElement = productCard.querySelector('.product-img, .product-img-main');
                    const categoryElement = productCard.querySelector('.product-category');
                    
                    const price = this.extractPrice(priceElement?.textContent);
                    const originalPrice = originalPriceElement ? this.extractPrice(originalPriceElement.textContent) : null;
                    const image = imageElement?.src || '';
                    const category = categoryElement?.textContent?.trim() || 'Produit Artisanal';
                    
                    this.addItem(productId, productName, originalPrice || price, image, category, originalPrice ? price : null);
                }
            }
        });
    }

    extractPrice(priceText) {
        if (!priceText) return 0;
        const match = priceText.match(/[\d\s]+/);
        return match ? parseInt(match[0].replace(/\s/g, '')) : 0;
    }
}

// Initialiser le panier
const cart = new Cart();
</script>

<?php get_footer(); ?>