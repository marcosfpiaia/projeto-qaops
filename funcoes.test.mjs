import { test, expect } from 'vitest';
import { validaLogin } from './funcoes.mjs';

test('Deve aprovar o login com credenciais corretas', () => {
    expect(validaLogin('admin', '01234')).toBe(true);
});

test('Deve rejeitar o login com senha incorreta', () => {
    expect(validaLogin('admin', 'senha_errada')).toBe(false);
});