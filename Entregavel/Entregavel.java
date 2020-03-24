public class Entregavel {
    public static void main(String[] args) {
        DigitalHouseManager digitalHouseManager = new DigitalHouseManager();

        digitalHouseManager.registrarProfessorTitular("ProfessorTitu", "1", 1, "JapaScript");
        digitalHouseManager.registrarProfessorTitular("ProfessorTitu", "2", 2, "Java");
        digitalHouseManager.registrarProfessorAdjunto("ProfessorAdju", "1", 3, 5);
        digitalHouseManager.registrarProfessorAdjunto("ProfessorAdju", "2", 4, 4);

        digitalHouseManager.registrarCurso("Full Stack", 20001, 3);
        digitalHouseManager.registrarCurso("Android", 20002, 2);

        digitalHouseManager.alocarProfessores(20001, 1, 3);
        digitalHouseManager.alocarProfessores(20002, 2, 4);

        digitalHouseManager.matricularAluno("Aluno", "1", 1);
        digitalHouseManager.matricularAluno("Aluno", "2", 2);
        digitalHouseManager.matricularAluno("Aluno", "3", 3);
        digitalHouseManager.matricularAluno("Aluno", "4", 4);
        digitalHouseManager.matricularAluno("Aluno", "5", 5);

        digitalHouseManager.matricularAluno(1, 20001);
        digitalHouseManager.matricularAluno(2, 20001);
        digitalHouseManager.matricularAluno(3, 20002);
        digitalHouseManager.matricularAluno(4, 20002);
        digitalHouseManager.matricularAluno(5, 20002);
    }
}
