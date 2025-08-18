FLAG = b'UCS{nice_ez_chall_see_you_in_ucs!!!!}'

def encrypt(flag: bytes) -> bytes:
    for i in range(len(flag)):
        flag[i] += i
    return flag

def decrypt(flag: bytes) -> bytes:
    flag = bytearray(flag)
    for i in range(len(flag)):
        flag[i] -= i
    return bytes(flag)

def main():
    # encrypted_flag = encrypt(bytearray(FLAG))
    # with open("flag.enc", "wb") as f:
    #     f.write(encrypted_flag)

    with open("flag.enc", "rb") as f:
        encrypted_flag = f.read()
        print(decrypt(encrypted_flag).decode())

if __name__ == "__main__":
    main()