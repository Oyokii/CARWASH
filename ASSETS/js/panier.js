const panier = [];

function ajouterAuPanier(button) {
    const article = button.parentElement;
    const nom = article.getAttribute('data-nom');
    const prix = parseFloat(article.getAttribute('data-prix'));
    const description = article.getAttribute('data-designation');

    panier.push({ nom, prix, description });
    afficherPanier();
}

function afficherPanier() {
    const panierListe = document.getElementById('panier-liste');
    const totalSpan = document.getElementById('total');

    panierListe.innerHTML = '';
    let total = 0;

    for (const article of panier) {
        const listItem = document.createElement('li');
        listItem.textContent = `${article.nom} 
        ${article.description} - ${article.prix}€ `;
        panierListe.appendChild(listItem);
        total += article.prix;
    }

    totalSpan.textContent = total;
}