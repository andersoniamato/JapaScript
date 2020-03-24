import java.util.ArrayList;
import java.util.List;

public class DigitalHouseManager {
    List<Aluno> listaAlunos = new ArrayList<>();
    List<Professor> listaProfessores = new ArrayList<>();
    List<Curso> listaCursos = new ArrayList<>();
    List<Matricula> listaMatriculas = new ArrayList<>();

    public void registrarCurso (String nome, Integer codigoCurso, Integer quantidadeMaximaDeAlunos){
        Curso nCurso = new Curso(nome, codigoCurso, quantidadeMaximaDeAlunos);
        listaCursos.add(nCurso);
    }

    public void excluirCurso(Integer codigoCurso){
        for (Curso Curso:listaCursos) {
            if (Curso.codCurso == codigoCurso) {
                listaCursos.remove(Curso);
            }
        }
    }

    public void registrarProfessorAdjunto(String nome, String sobrenome, Integer codigoProfessor, Integer quantidadeDeHoras){
        ProfessorAdjunto nProfessorAdjunto = new ProfessorAdjunto(nome,sobrenome,0, codigoProfessor,quantidadeDeHoras);
        listaProfessores.add(nProfessorAdjunto);
    }

    public void registrarProfessorTitular(String nome, String sobrenome, Integer codigoProfessor, String especialidade){
        ProfessorTitular nProfessorTitular = new ProfessorTitular(nome, sobrenome, 0, codigoProfessor, especialidade);
        listaProfessores.add(nProfessorTitular);
    }

    public void excluirProfessor(Integer codigoProfessor){
        for (Professor Professor:listaProfessores) {
            if (Professor.codProf == codigoProfessor) {
                listaCursos.remove(Professor);
            }
        }
    }

    public void matricularAluno(String nome, String sobrenome, Integer codigoAluno){
        Aluno nAluno = new Aluno(nome, sobrenome, codigoAluno);
        listaAlunos.add(nAluno);
    }

    public void matricularAluno(Integer codigoAluno, Integer codigoCurso){
        for (Aluno Aluno:listaAlunos) {
            if (Aluno.codAluno == codigoAluno) {
                for (Curso Curso:listaCursos) {
                    if (Curso.codCurso == codigoCurso){
                        if (Curso.adicionarUmAluno(Aluno) == true){
                            Matricula nMatricula = new Matricula(Aluno, Curso);
                            listaMatriculas.add(nMatricula);
                            System.out.println("Aluno "+Aluno.nome+" matriculado no curso "+Curso.nome+" com sucesso!");
                        }
                        else
                        {
                            System.out.println("Este curso já tem sua quantidade máxima de alunos!");
                        }
                    }
                }
            }
        }
    }

    public void alocarProfessores(Integer codigoCurso, Integer codigoProfessorTitular, Integer codigoProfessorAdjunto){
        for (Professor ProfessorTitular:listaProfessores) {
            if (ProfessorTitular.codProf == codigoProfessorTitular){
                for (Professor ProfessorAdjunto:listaProfessores) {
                    if (ProfessorAdjunto.codProf == codigoProfessorAdjunto){
                        for (Curso Curso:listaCursos) {
                            if (Curso.codCurso == codigoCurso){
                                Curso.setProfessorTitularCurso(ProfessorTitular);
                                Curso.setProfessorAdjuntoCurso(ProfessorAdjunto);
                            }
                        }
                    }
                }
            }
        }
    }



}
