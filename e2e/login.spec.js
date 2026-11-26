const { test, expect } = require('@playwright/test');

test('Deve fazer login com sucesso na cobaia', async ({ page }) => {
  await page.goto('http://127.0.0.1:8082/index.html');
  await page.fill('#usuario', 'admin');
  await page.fill('#senha', '1234');
  await page.click('#btn-entrar');
  await expect(page.locator('#mensagem')).toHaveText('Login com sucesso!');
});