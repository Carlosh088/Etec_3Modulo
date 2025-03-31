package com.example.demo.controllers;

import java.util.ArrayList;
import java.util.List;

import com.example.demo.models.Aluno;
import com.example.demo.models.Professor;
import com.example.demo.models.Pessoa;

import jakarta.validation.Valid;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("api/v1/escola")
public class escolaController {
    private final List<Pessoa> pessoas = new ArrayList<>();

    @GetMapping("/listarAlunos")
    public List<Aluno> listarAlunos() {
        List<Aluno> alunos = new ArrayList<>();
        for (Pessoa pessoa : pessoas) {
            if (pessoa instanceof Aluno) {
                alunos.add((Aluno) pessoa);
            }
        }
        return alunos;
    }

    @GetMapping("/listarProfessores")
    public List<Professor> listarProfessores() {
        List<Professor> professores = new ArrayList<>();
        for (Pessoa pessoa : pessoas) {
            if (pessoa instanceof Professor) {
                professores.add((Professor) pessoa);
            }
        }
        return professores;
    }

    @PostMapping("/cadastrarAluno")
    public ResponseEntity<String> cadastrarAluno(@RequestBody @Valid Aluno aluno) {
        pessoas.add(aluno);
        return ResponseEntity.status(HttpStatus.CREATED).body("Aluno cadastrado com sucesso!");
    }

    @PostMapping("/cadastrarProfessor")
    public ResponseEntity<String> cadastrarProfessor(@RequestBody @Valid Professor professor) {
        pessoas.add(professor);
        return ResponseEntity.status(HttpStatus.CREATED).body("Professor cadastrado com sucesso!");
    }

    @PutMapping("/atualizarAluno")
    public String atualizarAluno(@RequestBody @Valid Aluno alunoAtualizado) {
        for (int i = 0; i < pessoas.size(); i++) {
            Pessoa p = pessoas.get(i);
            if (p instanceof Aluno) {
                Aluno aluno = (Aluno) p;
                if (aluno.getCpf().equals(alunoAtualizado.getCpf()) && aluno.getIdade() >= 18) {
                    pessoas.set(i, alunoAtualizado);
                    return "Aluno atualizado com sucesso!";
                }
            }
        }
        return "Aluno não encontrado ou menor de idade!";
    }

    @PutMapping("/atualizarProfessor")
public String atualizarProfessor(@RequestBody @Valid Professor professorAtualizado) {
    for (int i = 0; i < pessoas.size(); i++) {
        Pessoa p = pessoas.get(i);
        if (p instanceof Professor) {
            Professor professor = (Professor) p;
            if (professor.getCpf().equals(professorAtualizado.getCpf()) && professor.getIdade() >= 18) {
                pessoas.set(i, professorAtualizado);
                return "Professor atualizado com sucesso!";
            }
        }
    }
    return "Professor não encontrado ou menor de idade!";
}

}
