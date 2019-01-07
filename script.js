function vente(stringTitre, stringresumer, image,numberPrix) {


    this.resumer = stringresumer;
    this.titre = stringTitre;
    this.image = image;
    this.prix = numberPrix;


     var mainwidows = document.createElement("div");
     mainwidows.className = "main";
     document.getElementById("container").appendChild(mainwidows);

     var titreWindows = document.createElement('div');
     titreWindows.className ="titre";
     titreWindows.innerHTML = this.titre;
     mainwidows.appendChild(titreWindows);

     var imageProduit = document.createElement("img");
     imageProduit.src = this.image;
     imageProduit.className = "image";
     mainwidows.appendChild(imageProduit);

    var resumerWindows = document.createElement('div');
    resumerWindows.className ="resumer";
    resumerWindows.innerHTML = this.resumer;
    mainwidows.appendChild(resumerWindows);

    var prix = document.createElement('div');
    prix.className ="prix";
    prix.innerHTML = this.prix+"€";
    mainwidows.appendChild(prix);

}

var resumer1 = "une carte graphique e la marque MSI";
var resumer2 = "une carte graphique de la marque EVGA";
var resumer3 = " une carte graphique de la marque ASUS";
var vente1 = new vente("MSI GTX 980 TI",resumer1,"https://media.ldlc.com/r1600/ld/products/00/03/11/04/LD0003110479_2.jpg",200);
var vente2 = new vente("EVGA GTX 980 TI",resumer2,"https://media.ldlc.com/ld/products/00/03/13/59/LD0003135984_2.jpg",199);
var vente3 = new vente("MSI RTX 2080 TI",resumer3,"https://www.vortez.net/articles_thumb/31166_asus%20strix%20gtx%20980ti%20dc3%20oc%20review%20-%20intro%201.jpg",189);





