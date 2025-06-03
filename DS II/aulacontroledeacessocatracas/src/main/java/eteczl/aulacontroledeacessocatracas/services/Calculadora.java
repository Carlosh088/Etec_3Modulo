package eteczl.aulacontroledeacessocatracas.services;

public class Calculadora {

    public double imc(double peso, double altura){
       double res = 0.0;

       try{ 
        if (peso < 0 || altura < 0) throw new RuntimeException();
        res = peso / (altura*altura);
    }catch(Throwable e){
        throw new RuntimeException(e);
    }
    return res;
}
}