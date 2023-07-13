<!DOCTYPE html>
<html>
<head>
    <title>Survey</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            margin: 20px auto;
            width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }
        
        h1 {
            text-align: center;
        }
        
        .question {
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .option {
            margin-bottom: 5px;
        }
        
        .submit-btn {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Survey</h1>
        <form method="post" action="process_survey.php">
            <div class="question">
                <label for="breakfast">Qual é o seu horário de café da manhã?</label>
            </div>
            <div class="option">
                <input type="radio" name="breakfast" value="cedo"> Cedo
            </div>
            <div class="option">
                <input type="radio" name="breakfast" value="meio"> Meio da manhã
            </div>
            <div class="option">
                <input type="radio" name="breakfast" value="tarde"> Tarde
            </div>
            
            <div class="question">
                <label for="afternoon">Qual é o seu horário de café da tarde?</label>
            </div>
            <div class="option">
                <input type="radio" name="afternoon" value="tarde"> Tarde
            </div>
            <div class="option">
                <input type="radio" name="afternoon" value="noite"> Noite
            </div>
            
            <div class="question">
                <label for="gender">Qual é o seu gênero?</label>
            </div>
            <div class="option">
                <input type="radio" name="gender" value="masculino"> Masculino
            </div>
            <div class="option">
                <input type="radio" name="gender" value="feminino"> Feminino
            </div>
            <div class="option">
                <input type="radio" name="gender" value="outro"> Outro
            </div>
            
            <div class="question">
                <label for="age">Qual é a sua idade?</label>
            </div>
            <div class="option">
                <input type="number" name="age">
            </div>
            
            <div class="question">
                <label for="education">Qual é o seu nível de escolaridade?</label>
            </div>
            <div class="option">
                <select name="education">
                    <option value="ensino_fundamental">Ensino Fundamental</option>
                    <option value="ensino_medio">Ensino Médio</option>
                    <option value="graduacao">Graduação</option>
                    <option value="pos_graduacao">Pós-Graduação</option>
                </select>
            </div>
            
            <div class="question">
                <label for="income">Qual é a sua renda?</label>
            </div>
            <div class="option">
                <input type="text" name="income">
            </div>
            
            <div class="question">
                <label for="notifications">Você gostaria de receber notificações quando o pão estiver quente?</label>
            </div>
            <div class="option">
                <input type="radio" name="notifications" value="sim"> Sim
            </div>
            <div class="option">
                <input type="radio" name="notifications" value="nao"> Não
            </div>
            
            <input class="submit-btn" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
