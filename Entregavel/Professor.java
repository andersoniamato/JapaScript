public class Professor {
    String nome, sobrenome;
    Integer tempoDeCasa, codProf;

    public Professor(String nome, String sobrenome, Integer tempoDeCasa, Integer codProf) {
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.tempoDeCasa = tempoDeCasa;
        this.codProf = codProf;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getSobrenome() {
        return sobrenome;
    }

    public void setSobrenome(String sobrenome) {
        this.sobrenome = sobrenome;
    }

    public Integer getTempoDeCasa() {
        return tempoDeCasa;
    }

    public void setTempoDeCasa(Integer tempoDeCasa) {
        this.tempoDeCasa = tempoDeCasa;
    }

    public Integer getCodProf() {
        return codProf;
    }

    public void setCodProf(Integer codProf) {
        this.codProf = codProf;
    }
}
