/**
 * Created by yunrui-tec on 2017-02-27.
 */
/*for(var i=0;i<5;i++){
    console.log(i);
}*/
for(var i=0;i<5;i++){
    setTimeout(function(){
        console.log(i)
    },1000)
}
for(var i=0;i<5;i++){
    (function (i) {
        setTimeout(function(){
            console.log(i);
        },1000)
    })(i)
}
for(var a=0;a<5;a++){
    setTimeout(function(a){
        console.log(a);
    },1000)
}