package eteczl.aulacontroledeacessocatracas.unite;

import static org.junit.jupiter.api.Assertions.assertEquals;
import static org.junit.jupiter.api.Assertions.assertThrows;

import org.junit.jupiter.api.Test;

import eteczl.aulacontroledeacessocatracas.services.Calculadora;

public class CalculadoraTest {

    @Test
    public void testaImcNumerosPositivos(){ 
        Calculadora c = new Calculadora();
        double res = c.imc(1,1);
        assertEquals(res,1);
    }

    @Test
    public void testaImcNumerosNegativos(){ 
    Calculadora c = new Calculadora();
    assertThrows(RuntimeException.class, () -> c.imc(1,-1));
    }
}
