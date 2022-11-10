class Nutritionist extends User {
    constructor(username,name,email,password,phone){
    super(username,name,email,password,phone);
    }
    Chat(){
        console.log('Chat Dimulai')
    }
    ConfirmConsult(){
        console.log('Konfirmasi Konsultasi')
    }

}