function sinParametros(){
    return 'hola mumdo'
}
console.log(sinParametros());

var sinParam=()=>'hola mundo';
console.log(sinParam());

//funciones flecha con parametro
//version clasica

function cuadrado(num){
    return num*num;
}
console.log(cuadrado(6));
//version flecha
var r= num => num*num;
console.log('flecha='+r(5));

//funcion flecha con varios parametros 
function suma(n,m){
    return n+m;
}
console.log(suma(10,20));
var sumar=(n,m)=>n+m;
console.log('flecha='+sumar(20,30));

var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
        
    }
    return array;
}
v=[];
x=5;;
console.log('flecha='+vec(v,x));
console.log('flecha='+vec(v,x)[0]);
  
var sumPar=(vector)=>{
    let suma=0;
    for (let i = 0; i < vector.length; i++) {
        if (vector [i]%2 == 0) {
            suma += vec[i];
        }
    }
    return suma;
}
 console.log('flecha='+sumPar(vec));   