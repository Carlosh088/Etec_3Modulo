package com.example.demo.controllers;

import java.util.ArrayList;
import java.util.List;

import com.example.demo.models.Aluno;
import com.example.demo.models.Professor;

import jakarta.validation.Valid;

import com.example.demo.models.Pessoa;

import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("api/v1/escola")
public class escolaController {
    public List<Pessoa> pessoas = new ArrayList<Pessoa>();
    
    @RequestMapping("/listarAlunos")
    public List<Aluno> listarAlunos() {
        List<Aluno> alunos = new ArrayList<Aluno>();
        for (Pessoa pessoa : pessoas) {
            if (pessoa instanceof Aluno) {
                alunos.add((Aluno) pessoa);
            }
        }
        return alunos;
    }

    @RequestMapping("/listarProfessores")
    public List<Professor> listarProfessores() {
        List<Professor> professores = new ArrayList<Professor>();
        for (Pessoa pessoa : pessoas) {
            if (pessoa instanceof Professor) {
                professores.add((Professor) pessoa);
            }
        }
        return professores;
    }

    @PostMapping("/cadastrarAluno")
    public void cadastrarAluno(Aluno aluno) {
        pessoas.add(aluno);
    }

    @PostMapping("/cadastrarProfessor")
    public void cadastrarProfessor(Professor professor) {
        pessoas.add(professor);
    }   

    @PutMapping("/atualizarAluno")
        public String atualizarAluno(@RequestBody @Valid aluno alunoAtualizado) {
            for (int i = 0; i < pessoas.size(); i++){
                if (pessoas.get(i) instanceof aluno && pessoas.get(i).getCpf().equals(alunoAtualizado.getCpf()) && pessoas.get(i).getIdade() >= 18){
                    pessoas.set(i, alunoAtualizado);
                    return "Aluno atualizado com sucesso!";
                }

                return "Aluno não encontrado ou menor de idade!";

            }
        }
    }
