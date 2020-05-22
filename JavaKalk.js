const srednia = {
    ocena : document.querySelector(".ocena"),
    waga : document.querySelector(".waga"),
    dodaj : document.querySelector(".dodaj"),
    licz : document.querySelector(".licz"),
    lista : document.querySelector(".lista"),
    wynik : document.querySelector(".wynik"),
    oceny:0,
    wagi:0,

    dodawanie: function(){
        srednia.wynik.innerText="..."
        srednia.oceny += srednia.ocena.value * srednia.waga.value;
        srednia.wagi += srednia.waga.value *1;

        srednia.lista.innerHTML+=(" ocena: " + srednia.ocena.value + ' waga: ' + 
        srednia.waga.value + "<br>");
        srednia.ocena.value = null;
        srednia.waga.value = null;


    },
    liczsrednia: function(){
        srednia.wynik.innerText = srednia.oceny / srednia.wagi;
    },
    guzik1: function(){
        this.dodaj.addEventListener("click", this.dodawanie)
    },
    guzik2: function(){
        this.licz.addEventListener("click", this.liczsrednia)
    }

}
srednia.guzik1();
srednia.guzik2();