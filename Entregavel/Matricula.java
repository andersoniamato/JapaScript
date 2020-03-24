import java.util.Date;

public class Matricula {
    Aluno Aluno;
    Curso Curso;
    Date dataDoDia = new Date();

    public Matricula(Aluno aluno, Curso curso) {
        Aluno = aluno;
        Curso = curso;

    }

    public Aluno getAluno() {
        return Aluno;
    }

    public void setAluno(Aluno aluno) {
        Aluno = aluno;
    }

    public Curso getCurso() {
        return Curso;
    }

    public void setCurso(Curso curso) {
        Curso = curso;
    }

    public Date getDataDoDia() {
        return dataDoDia;
    }

    public void setDataDoDia(Date dataDoDia) {
        this.dataDoDia = dataDoDia;
    }
}
