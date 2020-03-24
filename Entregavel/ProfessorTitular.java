public class ProfessorTitular extends Professor{
    String especialidade;

    public ProfessorTitular(String nome, String sobrenome, Integer tempoDeCasa, Integer codProf, String especialidade) {
        super(nome, sobrenome, tempoDeCasa, codProf);
        this.especialidade = especialidade;
    }

    public String getEspecialidade() {
        return especialidade;
    }

    public void setEspecialidade(String especialidade) {
        this.especialidade = especialidade;
    }
}
