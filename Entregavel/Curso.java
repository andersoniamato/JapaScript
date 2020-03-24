import java.util.ArrayList;
import java.util.List;

public class Curso {
    String nome;
    Integer codCurso;
    Professor ProfessorTitularCurso;
    Professor ProfessorAdjuntoCurso;
    Integer quantidadeMaxAlunos;
    List<Aluno> listaAlunos = new ArrayList<>();

    public Curso(String nome, Integer codCorso, Integer quantidadeMaxAlunos, List<Aluno> listaAlunos) {
        this.nome = nome;
        this.codCurso = codCorso;
        this.quantidadeMaxAlunos = quantidadeMaxAlunos;
        this.listaAlunos = listaAlunos;
    }

    public Curso(String nome, Integer codCorso, Integer quantidadeMaxAlunos) {
        this.nome = nome;
        this.codCurso = codCorso;
        this.quantidadeMaxAlunos = quantidadeMaxAlunos;
    }

    public String getNome() {
        return nome;
    }

    public Integer getCodCurso() {
        return codCurso;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setCodCurso(Integer codCurso) {
        this.codCurso = codCurso;
    }

    public Integer getQuantidadeMaxAlunos() {
        return quantidadeMaxAlunos;
    }

    public void setQuantidadeMaxAlunos(Integer quantidadeMaxAlunos) {
        this.quantidadeMaxAlunos = quantidadeMaxAlunos;
    }

    public List<Aluno> getListaAlunos() {
        return listaAlunos;
    }

    public void setListaAlunos(List<Aluno> listaAlunos) {
        this.listaAlunos = listaAlunos;
    }

    public Professor getProfessorTitularCurso() {
        return ProfessorTitularCurso;
    }

    public void setProfessorTitularCurso(Professor professorTitularCurso) {
        ProfessorTitularCurso = professorTitularCurso;
    }

    public Professor getProfessorAdjuntoCurso() {
        return ProfessorAdjuntoCurso;
    }

    public void setProfessorAdjuntoCurso(Professor professorAdjuntoCurso) {
        ProfessorAdjuntoCurso = professorAdjuntoCurso;
    }

    public Boolean adicionarUmAluno(Aluno umAluno){
        if (quantidadeMaxAlunos + 1 > quantidadeMaxAlunos)
        {
            listaAlunos.add(umAluno);
            return true;
        }
        else {
            return false;
        }
    }

    public void excluirAluno(Aluno umAluno){
        listaAlunos.remove(umAluno);
        quantidadeMaxAlunos --;
    }

}
