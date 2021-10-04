var fracciones={
    num1:6,
    num2:4,
    de1:1,
    de2:3,
    sumar:function(){
        numera1=this.num1 * this.de2;
        numera2=this.num2 * this.de1;
        numeraS=numera1 + numera2;
        denomiSuma=this.de1 * this.de2;
        return 'la suma es :'+ numeraS + ' / ' + denomiSuma;
    },
    restar:function(){
        numera1=this.num1 * this.de2;
        numera2=this.num2 * this.de1;
        numeraR=numera1 - numera2;
        denomiResta=this.de1 * this.de2;
        return 'la resta es :'+ numeraR + ' / ' + denomiResta;
    },
    multiplicar:function(){
        numera1=this.num1 * this.num2;
        numera2=this.de1 * this.de2;
        return 'la multiplicacion es: '+ numera1 + ' / ' +numera2;
    },
    dividir:function(){
        numera1=this.num1 * this.de2;
        numera2=this.num2 * this.de1;
        return 'la division es :'+ numera1 + ' / ' +numera2;
    }
}

console.log(fracciones.sumar());

console.log(fracciones.restar());

console.log(fracciones.multiplicar());

console.log(fracciones.dividir());