class persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }
    set nombre(nombre){
        this._nombre=nombre;
    }
    get nombre(){
        return this._nombre;
    }
    set apellido(apellido){
        this._apellido=apellido;
    }
    get apellido(){
        return this._apellido;
    }
    nombreCompleto(){
        return this._nombre+' '+this._apellido;
    }
}
class aprendiz extends persona{
    constructor(nombre,apellido,programa,ficha){
        super(nombre,apellido);
        this._programa=programa;
        this._ficha=ficha;
    }
    set programa(programa){
        this._programa=programa;
    }
    get programa(){
        return this._programa;
    }
    set ficha(ficha){
        this._ficha=ficha;
    }
    get ficha(){
        return this._ficha;
    }
    inforCompleto(){
        return this._nombre+' '+this._apellido+' '+this._programa+' '+this._ficha;
    }
}
var ap=new aprendiz('laura','tellez','contabilidad','2142329')
console.log(ap.inforCompleto());

obj=new persona('julio','correal');
console.log(obj.nombre);
obj.nombre='Roberto';
console.log(obj.nombre);
console.log(obj.nombreCompleto());

