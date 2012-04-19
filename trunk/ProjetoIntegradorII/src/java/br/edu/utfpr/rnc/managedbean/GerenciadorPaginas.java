package br.edu.utfpr.rnc.managedbean;

import java.io.Serializable;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;

@ManagedBean(name = "gerenciadorPaginas")
@SessionScoped
public class GerenciadorPaginas implements Serializable {

    private String cabecalho = "./paginas/cabecalho.xhtml";
    private String menu = "./paginas/menu.xhtml";
    private String conteudo = "./paginas/home.xhtml";
    private String rodape = "./paginas/rodape.xhtml";

    public GerenciadorPaginas() {
    }

    public String getConteudo() {
        return conteudo;
    }

    public void setConteudo(String conteudo) {
        this.conteudo = conteudo;
    }

    public String getMenu() {
        return menu;
    }

    public String getRodape() {
        return rodape;
    }

    public String getCabecalho() {
        return cabecalho;
    }
    public String cadastroDepartamento(){
        this.conteudo = "./paginas/departamento/cadastro.xhtml";
        return "refreshPage";
    }
}