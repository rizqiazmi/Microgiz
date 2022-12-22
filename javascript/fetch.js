fetch("https://reqres.in/api/user/x") // x // 1
// .then((response)=>console.log(response))
.then((response)=> response.json())
.then((json)=>console.log(json))

// conditional sentence //
// .then((response)=>{
//     if(response.ok){
//         console.log('ada data')
//     }else{
//         console.log('tidak ada data');
//     }
// })

// catch //
    // if(response.ok){
    //     return response.json()
    // }else{
    //     return Promise.reject( // "Ada yang tidak sesuai"
        
    //     {
    //         status:response.status
    //     }


    //     )
    // }
// })

// .catch((error)=>console.log('error ' + error))
. catch((error)=>{
    // if(error.status == 404){
    //     console.log('Data tidak ditemukan')
    // }
// conditional sentence 2//
    console.log(error)
})


// method post //
// ,
// {
//     method:'post',
//     headers:{
//         'Content-Type':'application/json'
//     },
//     body:JSON.stringify({
//         name:'Sholeh',
//         job:'Guru'
//     })
// })
