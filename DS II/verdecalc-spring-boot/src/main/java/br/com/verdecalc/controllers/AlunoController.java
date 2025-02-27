package br.com.verdecalc.controllers;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;



@RestController
@RequestMapping("/api/v1/alunos")
public class AlunoController {

    @GetMapping("/findByName")
    public String findByName(@RequestParam String nome){
        return "Olá aluno " + nome;
    }
    
    @GetMapping("/get/{id}")
    public String getById(@PathVariable(value = "id") String id){
        return "id para pegar o usuário foi " + id;
    }

}

