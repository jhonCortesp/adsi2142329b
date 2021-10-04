/*
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
*/
var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
        
    }
    return array;
}
v=[];
x=2;
console.log('flecha='+vec(v,x));
console.log('flecha='+vec(v,x)[0]);
console.log(v);


//suma par
var sumPar=vecto=>{
    let suma=0;
    for (let i = 0; i < vecto.length; i++) {
        if (vecto [i]%2 == 0) {
            suma += v[i];
        }
    }
    return suma;
}
console.log('suma par ='+sumPar(v)); 


//suma
var sum=v=>{
    let sumar=0;
    for (let i = 0; i < v.length; i++) {       
            sumar += v[i];
    }
    return sumar;
}
console.log('la suma es='+sum(v)); 

//numero mayor
var may =v=> Math.max(...v);
console.log('El numero mayor  es: '+ may(v));

//numero menor
var min =v=> Math.min(...v);
console.log('el numero menor es:'+min(v));

//promedio
var pro=v=>{
    let suma=0;
    for (let i = 0; i < v.length; i++) {       
            suma += v[i];
    }
    return suma/v.length;
}
console.log('promedio ='+pro(v)); 

//mediana
var med =v=>{
    let a = Math.floor((v.length - 1) / 2);
    let b = Math.ceil((v.length - 1) / 2);
    let median = (v[a] + v[b]) / 2;
    return median;
}
console.log('mediana ='+med(v)); 

