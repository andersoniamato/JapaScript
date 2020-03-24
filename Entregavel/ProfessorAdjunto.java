public class ProfessorAdjunto extends Professor {
    Integer horasDeMonitoria;

    public ProfessorAdjunto(String nome, String sobrenome, Integer tempoDeCasa, Integer codProf, Integer horasDeMonitoria) {
        super(nome, sobrenome, tempoDeCasa, codProf);
        this.horasDeMonitoria = horasDeMonitoria;
    }

    public Integer getHorasDeMonitoria() {
        return horasDeMonitoria;
    }

    public void setHorasDeMonitoria(Integer horasDeMonitoria) {
        this.horasDeMonitoria = horasDeMonitoria;
    }
}
