class Admin extends People{
    constructor(username,name,email,password,phone,access){
    super(username,name,email,password,phone);
        this.access=access;
    }
    
    Login (){
        console.log ('Login')
    }
    
    DelUser (){
        console.log ('User Dihapus')
    }

    ConnectUserToNutritionist (){
        console.log ('Terhubung Dengan Ahli Gizi')
    }

    AddNews (){
        console.log ('Berita Baru')
    }

    DelNews (){
        console.log ('Berita Dihapus')
    }
    EditNews (){
        console.log ('Berita Dirubah')
    }


}