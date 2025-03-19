package com.example.wagnertarefa.restcontrollers;

import java.util.ArrayList;
import java.util.List;

import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.wagnertarefa.models.aluno;

import jakarta.validation.Valid;

@RestController
@RequestMapping("api/controller/alunos")
public class alunoController {

    @RequestMapping("/listar")
    public List<aluno> getAlunos(){
        List<aluno> alunos = new ArrayList<>();
        alunos.add(new aluno("Carlos", 12, "123.456.789.90"));
        alunos.add(new aluno("Carlinhos", 13, "123.456.789.91"));
        alunos.add(new aluno("Roger Guedes", 14, "123.456.789.92"));
        return alunos;
    }

    @PostMapping("/inserirAluno")
    public aluno inserirAluno(@RequestBody @Valid aluno aluno){
        return aluno;
    }
        

}
