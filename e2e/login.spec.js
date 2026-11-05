const { test, expect } = require('@playwright/test');

test('Deve fazer login com sucesso no AltaraCRM', async ({ page }) => {
  // 1. Acessa o seu servidor local do XAMPP
  await page.goto('http://localhost:8082/projeto-qaopscd/login.php')

  // 2. O robô acha os campos e digita as credenciais corretas
  await page.fill('input[name="email"]', 'marcosfpiaia@gmail.com');
  await page.fill('input[name="senha"]', 'SenhaForte123');

  // 3. O robô clica no botão Entrar
  await page.click('button:has-text("Entrar")');

  // 4. O robô verifica se a mensagem de sucesso apareceu na tela
  await expect(page.locator('text=Bem-vindo, Marcos')).toBeVisible();
});