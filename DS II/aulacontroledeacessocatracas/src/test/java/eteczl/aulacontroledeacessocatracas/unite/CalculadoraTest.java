package eteczl.aulacontroledeacessocatracas.unite;

import static org.junit.jupiter.api.Assertions.assertThrows;

import org.junit.jupiter.api.Test;

import eteczl.aulacontroledeacessocatracas.services.Calculadora;

public class CalculadoraTest {

    @Test
    public void testaImcNumerosPositivos(){ 
    Calculadora C = new Calculadora();
    double res = C.imc(1,1);
    assertEquals(res,1);
    }

    @Test
    public void testaImcNumerosNegativos(){ 
    Calculadora C = new Calculadora();
    assertThrows(RuntimeException.class, () -> c.imc(1,-1));
    }
}
