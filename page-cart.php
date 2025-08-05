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

    .quantity-btn:disabled {
        background-color: #e0e0e0;
        color: #999;
        cursor: not-allowed;
        border-color: #ccc;
    }

    .quantity-btn:disabled:hover {
        background-color: #e0e0e0;
        transform: none;
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

    updateQuantity(productId, action) {
        const item = this.items.find(item => item.id == productId);
        if (!item) return;

        if (action === 'increase') {
            if (item.quantity < item.stock) {
                item.quantity++;
            } else {
                this.showNotification('Quantité maximale en stock atteinte !', 'error');
                return;
            }
        } else if (action === 'decrease') {
            item.quantity--;
            if (item.quantity <= 0) {
                this.removeItem(productId);
                return;
            }
        }

        this.saveCart();
        this.updateDisplay();
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

            const isStockLimited = typeof item.stock !== 'undefined' && item.stock !== null;
            const canIncrease = !isStockLimited || item.quantity < item.stock;

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
                        ${isStockLimited ? `<p style="font-size: 12px; color: #777;">Stock disponible : ${item.stock}</p>` : ''}
                    </div>
                    <div class="cart-item-actions">
                        <div class="quantity-controls">
                            <button class="quantity-btn" data-product-id="${item.id}" data-action="decrease">-</button>
                            <span class="quantity-display">${item.quantity}</span>
                            <button class="quantity-btn" data-product-id="${item.id}" data-action="increase" ${canIncrease ? '' : 'disabled'}>+</button>
                        </div>
                        <button class="remove-item" data-product-id="${item.id}">
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

    showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        const bgColor = type === 'success' ? 'var(--success-green)' : 'var(--danger-red)';
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${bgColor};
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
        
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

    checkout() {
        if (this.items.length === 0) {
            this.showNotification('Votre panier est vide !', 'error');
            return;
        }

        const formHtml = `
            <div id="checkout-modal" style="position:fixed;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.6);display:flex;align-items:center;justify-content:center;z-index:9999;">
                <form id="user-info-form" style="background:var(--white);padding:30px;border-radius:12px;width:90%;max-width:450px;box-shadow:0 8px 32px rgba(0,0,0,0.2);">
                    <h2 style="margin-bottom:20px; color: var(--primary-blue); font-family: Fredoka, sans-serif;">Vos informations</h2>
                    <input type="text" id="checkout-name" placeholder="Nom complet" required style="width:100%;margin-bottom:12px;padding:10px;border:1px solid #ccc; border-radius:6px;">
                    <input type="email" id="checkout-email" placeholder="Email" required style="width:100%;margin-bottom:12px;padding:10px;border:1px solid #ccc; border-radius:6px;">
                    <input type="tel" id="checkout-phone" placeholder="Téléphone" required style="width:100%;margin-bottom:12px;padding:10px;border:1px solid #ccc; border-radius:6px;">
                    <textarea id="checkout-message" placeholder="Message (optionnel)" style="width:100%;margin-bottom:20px;padding:10px;border:1px solid #ccc; border-radius:6px;min-height:80px;"></textarea>
                    <div style="display:flex; gap:10px; justify-content:flex-end;">
                        <button type="button" id="cancel-checkout" style="background:#f1f1f1;color:#333;padding:10px 20px;border:none;border-radius:6px;font-weight:600;">Annuler</button>
                        <button type="submit" style="background:var(--primary-blue);color:var(--white);padding:10px 20px;border:none;border-radius:6px;font-weight:700;">Envoyer la commande</button>
                    </div>
                </form>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', formHtml);

        const modal = document.getElementById('checkout-modal');
        const form = document.getElementById('user-info-form');
        const cancelBtn = document.getElementById('cancel-checkout');

        const closeModal = () => {
            modal.remove();
        };

        cancelBtn.onclick = closeModal;

        form.onsubmit = (e) => {
            e.preventDefault();

            const name = document.getElementById('checkout-name').value;
            const email = document.getElementById('checkout-email').value;
            const phone = document.getElementById('checkout-phone').value;
            const message = document.getElementById('checkout-message').value;

            let cartSummary = "Récapitulatif de la commande :\n\n";
            this.items.forEach(item => {
                const price = item.promoPrice || item.price;
                cartSummary += `- ${item.name} (x${item.quantity}) : ${this.formatPrice(price * item.quantity)} FCFA\n`;
            });
            cartSummary += `\nTotal de la commande : ${this.formatPrice(this.getTotal())} FCFA`;

            const body = `Bonjour, je souhaite passer la commande suivante :\n
------------------------------------
Informations client :
Nom : ${name}
Email : ${email}
Téléphone : ${phone}
${message ? `\nMessage : ${message}\n` : ''}
------------------------------------
${cartSummary}
\n------------------------------------
Merci.`;

            const mailtoLink = `mailto:ot.ouestcameroun@yahoo.fr?subject=${encodeURIComponent('Nouvelle commande depuis la boutique en ligne')}&body=${encodeURIComponent(body)}`;

            window.location.href = mailtoLink;

            this.showNotification('Votre client de messagerie s\'ouvre pour envoyer la commande.');
            closeModal();
            setTimeout(() => {
                this.clearCart();
            }, 1000); // Clear cart after a delay
        };
    }

    init() {
        this.updateDisplay();
        
        const cartContent = document.getElementById('cart-content');

        cartContent.addEventListener('click', (e) => {
            const target = e.target.closest('.quantity-btn, .remove-item');
            if (!target) return;

            e.preventDefault();
            const productId = target.dataset.productId;

            if (target.classList.contains('quantity-btn')) {
                const action = target.dataset.action;
                this.updateQuantity(productId, action);
            }

            if (target.classList.contains('remove-item')) {
                this.removeItem(productId);
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