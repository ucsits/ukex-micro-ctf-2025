FLAG = b'UCS{REDACTED}'

def encrypt(flag: bytes) -> bytes:
    for i in range(len(flag)):
        flag[i] += i
    return flag

def decrypt(flag: bytes) -> bytes:
    flag = bytearray(flag)
    # to be implemented

def main():
    encrypted_flag = encrypt(bytearray(FLAG))
    with open("flag.enc", "wb") as f:
        f.write(encrypted_flag)

if __name__ == "__main__":
    main()