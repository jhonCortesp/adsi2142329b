//4ra forma de objetos objetos en JS
class estudiante{
    constructor(nombre,apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}






//3ra forma de trabajar con objetos en JS
function aprendiz(){
    this.nombre='maria';
    this.apellido='rodriguez';
}
var ob=new aprendiz();
console.log(typeof(ob));
console.log(ob.nombre);




//atributos=propiedades
//this=esta clase, este objeto 
//2da forma de generar objetos en js
//JSON=java script object notation -clave:valor
var alumno={
    nombre:'Pedro',
    apellido:'Dias',
    nombreCompleto:function(){
        return this.nombre+' '+this.apellido;
    }
}
alumno.telefono='2566632';
//recorrer claves de objeto con for in
for(atributo in alumno){
    console.log(atributo);
}

//convertir valores de objeto a array
var arreglo=Object.values(alumno);
console.log(arreglo);

delete alumno.telefono;

var fraccionarios={
    num1:5,
    num2:4,
    ope1:2,
    ope2:3,
    suma:function(){
        return this.num1+' '+this.num2;
    }
}
console.log(fraccionarios.suma());
//acceso por operador punto
console.log(alumno.nombreCompleto());
console.log(alumno.nombre);
console.log(alumno.apellido);

//acceso poe operador llave

console.log(alumno['nombreCompleto']);
console.log(alumno['nombre']);
console.log(alumno['apellido']);

//1ra forma de generar objetos en js
var persona=new Object();
persona.nombre='jhon';
persona.apellido='cortes';
persona.mostrar=function(){
    return nombre+''+apellido;
}



/*var num=100;
console.log(typeof(num));
var t='palabra';
console.log(typeof(t));*/