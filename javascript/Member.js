class Member extends User {
    constructor(username,name,email,password,phone){
        super(username,name,email,password,phone);
    }
    Register (){
        console.log ('Anda Telah Terdaftar')
    }
    
    Login (){
        console.log ('Login Berhasil')
    }
    ReadNews (){
        console.log ('Berita Dibaca')
    }
    RegisterConsult (){
        console.log ('Daftar Konsultasi')
    }
    Chat (){
        console.log ('Chat Dimulai')
    }
    Calculate (){
        console.log ('Makanan Dihitung')
    }

    
}
