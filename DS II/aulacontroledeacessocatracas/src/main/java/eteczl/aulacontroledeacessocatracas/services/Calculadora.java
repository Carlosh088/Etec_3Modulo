package eteczl.aulacontroledeacessocatracas.services;

import javax.management.RuntimeErrorException;

public class Calculadora {

    public double imc(double peso, double altura){
        double res = 0.0;
       try{ if (peso < 0 || altura > 0)
        res = peso / (altura*altura);
    }catch(Throwable e){
        throw new RuntimeErrorException(e);
    }

    return res;

}
}