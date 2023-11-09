const form = document.getElementById("devisForm");
const output = document.getElementById("devisOutput");

form.addEventListener("submit", function(event) {
  event.preventDefault();
  const nom = form.elements["nom"].value;
  const prénom = form.elements["prénom"].value;
  const email = form.elements["email"].value;
  const telephone = form.elements["telephone"].value;
  const description = form.elements["description"].value;
  var prestation = form.elements["produit"].value;
  var produit = form.elements["produit"].value;
  var categorie=document.getElementById("articles");
  var num_categorie=categorie.substr(0,2);
  let prix_presta = null;
  let prix_produit = null;

  switch (num_categorie, prestation, produit){
    case "01":
      case "presta 1":
        a = [01,"Basic carwash citadine", 30]
        prix_presta = a[2];
        break;
      case "presta 2":
        b= [02, "Basic carwash SUV/4x4", 50]
        prix_presta = b[2];
        break;
      case "presta 3":
        c= [03, "Super carwash citadine", 100]
        prix_presta = c[2];
        break;
      case "presta 4":
        d= [04, "Super carwash SUV/4x4", 30]
        prix_presta = d[2];
        break;
      case "presta 5":
        e= [05, "Maxi carwash citadine", 90]
        prix_presta = e[2];
        break;
      case "presta 6":
        f= [06,"Maxi carwash SUV/4x4", 70]
        prix_presta = f[2];
        break;

      case "02":
        case "produit 1":
          g= [07,"Aspirateur Eau/Poussière", 30]
          prix_produit = g[2];
          break;
        case "produit 2":
          h= [08,"Chiffon", 50]
          prix_produit = h[2];
          break;
        case "produit 3":
          i= [09,"Brosse", 100]
          prix_produit = i[2];
          break;
        case "produit 4":
          j= [10,"Désodorisant", 70]
          prix_produit = j[2];
          break;
        case "produit 5":
          k= [11,"Pshit pshit", 20]
          prix_produit = k[2];
          break;
  }
  

  let quantite = form.elements["quantite"].value;
  let coutTotal = quantite * prix_produit + prix_presta;
  let TVA = coutTotal* 0.2;
  let TTC = coutTotal+TVA;



  const outputHTML = `
    <h2>Votre devis:</h2>
    <p>Nom: ${nom}</p>
    <p>Prénom: ${prénom}</p>
    <p>Email: ${email}</p>
    <p>Téléphone: ${telephone}</p>
    <p>Description du travail: <BR>${description}</p>

    <table>
      <tr>
        <th>Description</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>${categorie}</td>
        <td> ${prix_produit} €</td>
        <td> ${quantite}</td>
        <td> ${coutTotal} €</td>
      </tr>
      <tr>
        <td colspan="3">TOTAL</td>
        <td>${coutTotal} €</td>
      </tr>
      <tr>
        <td colspan="3">TVA</td>
        <td> ${TVA} €</td>
      </tr>
      <tr>
        <td colspan="3">Total TTC</td>
        <td> ${TTC} €</td>
      </tr>
    </table>

  `;

  output.innerHTML = outputHTML;

  var printWindow = window.open();
  printWindow.document.open();
  printWindow.document.write(devisHTML);
  printWindow.document.close();

  printWindow.print();
  
});
