#CÓDIGO CRIADO APENAS PARA EXERCÍCIO DE LÓGICA...NÃO FAZ PARTE DO DESAFIO 100 DIAS DE PHP
def cabeçalho():
    print("-" * 50)
    print("LISTA DE COMPRAS (DIGITE 'FIM' PARA ENCERRAR)".center(50))
    print("-" * 50)


cabeçalho()

lista_de_compras = []

while True:
    item = input("Adicione um item a lista:")
    if item == "FIM":
        break
    else:
      lista_de_compras.append(item)


print(lista_de_compras)