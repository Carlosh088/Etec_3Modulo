package br.com.verdecalc.verdecalc_spring_boot;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.ComponentScan;

@SpringBootApplication
@ComponentScan("br.com.verdecalc.controllers")
public class VerdecalcSpringBootApplication {

	public static void main(String[] args) {
		SpringApplication.run(VerdecalcSpringBootApplication.class, args);
	}

}
