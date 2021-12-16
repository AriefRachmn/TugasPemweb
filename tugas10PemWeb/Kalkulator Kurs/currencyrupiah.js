function setPrice(set){
    nilai = document.getElementById("nilai").value
    if(set == "kosong"){
        var hasil = nilai * 0
    } else if(set == "us_dollar"){
        var hasil = nilai * 9.915
    } else if(set == "sg_dollar"){
        var hasil = nilai * 13.472
    } else if(set == "malay_ringgit"){
        var hasil = nilai * 874
    } else if(set == "jpn_yen"){
        var hasil = nilai * 120
    } else if(set == "europe_euro"){
        var hasil = nilai * 15.888
    } else if(set == "arab_riyal"){
        var hasil = nilai * 3.592
    } 
    document.getElementById("hasil").value = hasil
}