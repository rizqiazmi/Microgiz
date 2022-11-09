class Consult
{
    constructor(name, age, sex, schedule, payMethod, accNum)
    {
        this.name = name;
        this.age = age;
        this.sex = sex;
        this.schedule = schedule;
        this.payMethod = payMethod;
        this.accNum = accNum;
    }
    
    requestConsult()
    {
        console.log('Permintaan Konsultasi')
    }
    acceptConsult()
    {
        console.log('Permintaan Diterima')
    }
    rejectConsult()
    {
        console.log('Permintaan Ditolak')
    }
}