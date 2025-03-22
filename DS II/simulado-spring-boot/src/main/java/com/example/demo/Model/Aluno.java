package com.example.demo.Model;

import org.hibernate.validator.constraints.br.CPF;

import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;

public class Aluno {
    
    @NotNull(message = "Nome não pode ser nulo")
    @NotBlank(message = "Nome não pode ser branco")
    private String nome;

    @NotNull(message = "Idade não pode ser nula")
    private Integer idade;

    @NotNull(message = "CPF não pode ser nulo")
    @NotBlank(message = "CPF não pode ser branco")
    @CPF(message = "CPF inválido")
    private String cpf;

        public Aluno(String nome, Integer idade, String cpf){
            this.nome=nome;
            this.idade=idade;
            this.cpf=cpf;
        }

        public String getNome() {
            return nome;
        }

        public void setNome(String nome){
            this.nome=nome;
        }

        public Integer getIdade() {
            return idade;
        }

        public void setIdade(Integer idade){
            this.idade=idade;
        }

        public String getCpf() {
            return cpf;
        }

        public void setCpf(String cpf){
            this.cpf=cpf;
        }
    }
