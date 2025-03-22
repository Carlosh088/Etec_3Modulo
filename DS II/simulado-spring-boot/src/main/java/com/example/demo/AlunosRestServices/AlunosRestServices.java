package com.example.demo.AlunosRestServices;

import java.util.ArrayList;
import java.util.List;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.demo.Model.Aluno;

import jakarta.validation.Valid;

@RestController
@RequestMapping("/api/v1")
public class AlunosRestServices {
    List<Aluno> alunos = new ArrayList<>();
    @GetMapping("/alunos/listar")
    public List<Aluno> getAlunos() {
        alunos.add(new Aluno("Carlos", 19, "456.381.358-39"));
        return alunos;
    }

@PostMapping("/alunos/inserir")
    public List<Aluno> inserirAluno(@RequestBody @Valid Aluno aluno){
        alunos.add(aluno);
        
        System.out.println("Aluno inserido: " + aluno);
        return alunos;
    }


}
