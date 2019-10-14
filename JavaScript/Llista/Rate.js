class Rate {

    /*
    Tarifa:
    id, nom, canvi H-€(1 hora - 10 euros), canviable(true,false);

    Ordenar per preu.
    Cercar tarifes canviables.
    Quanties tarifes hi ha entre 50 i 100 euros hora.
    */

    constructor(id,name,priceHour,redeemable) {
        this.id = id;
        this.name = name;
        this.priceHour = priceHour;
        this.redeemable = redeemable;
        this.divisa = "€"
    }

    info(){
        var auxRedeemable = this.redeemable? "+" : "-";
		return "<strong>ID:</strong> " + this.id + ", <strong>Name:</strong> " + this.name + ", <strong>Price/Hour:</strong> " + this.priceHour + this.divisa + ",<strong> Redeemable:</strong> " + auxRedeemable;
    }

    getRedeemable(){
        return this.redeemable;
    }

    getPriceHour(){
        return this.priceHour;
    }
    convertToEuro() {
        if (this.divisa == "$"){
            this.priceHour = Math.round(this.priceHour * 0.907178);
            this.divisa = "€"
        }
    }
    convertToDolar() {
        if (this.divisa == "€"){
            this.priceHour = Math.round(this.priceHour * 1.10232);
            this.divisa = "$"
        }
    }

}