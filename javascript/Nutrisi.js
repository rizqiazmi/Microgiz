class Nutrisi{
    constructor(protein,TotalLemak,kalori,glukosa,natrium){
        this.protein=protein;
        this.TotalLemak=TotalLemak;
        this.kalori=kalori;
        this.glukosa=glukosa;
        this.natrium=natrium;
    }
    
    Search(protein,TotalLemak,kalori,glukosa,natrium){
        console.log (protein + ' ' + TotalLemak + '' + kalori + ' ' + glukosa + ' ' + natrium);
    }

}
