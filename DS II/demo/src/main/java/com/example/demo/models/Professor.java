package com.example.demo.models;
import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;

public class Professor extends Pessoa {

    @NotNull
    @NotBlank
    private String disciplina;

    public Professor(String nome, int idade, String cpf, String disciplina) {
        super(nome, idade, cpf);
        this.disciplina = disciplina;
    }

    public String getDisciplina() {
        return disciplina;
    }

    public void setDisciplina(String disciplina) {
        this.disciplina = disciplina;
    }

}
