import requests

def get_user_input():
    api_key = input("Enter your API Key: ").strip()
    target = input("Enter the target domain or IP: ").strip()
    
    print("\nChoose a tool:")
    print("1. Nmap Scan")
    print("2. Whois Lookup")
    print("3. Nslookup")
    print("4. TheHarvester")
    
    choice = input("Enter your choice (1-4): ").strip()
    tools = {"1": "nmap", "2": "whois", "3": "nslookup", "4": "theHarvester"}
    
    return api_key, target, tools.get(choice, None)

def make_request(api_key, target, tool):
    if not tool:
        print("Invalid choice. Exiting.")
        return
    
    base_url = "https://nmap.ransomewatch.online"
    url = f"{base_url}/{tool}"
    params = {"API-Key": api_key, "text": target}
    
    print("\nSending request...")
    response = requests.get(url, params=params)
    
    if response.status_code == 200:
        print("\nResponse:")
        print(response.json())
    else:
        print(f"\nError {response.status_code}: {response.text}")

def main():
    api_key, target, tool = get_user_input()
    make_request(api_key, target, tool)

if __name__ == "__main__":
    main()
