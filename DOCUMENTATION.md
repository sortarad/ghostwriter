## How to install?
Install via the Control Panel or via composer

```bash
composer require sortarad/ghostwriter
```

To load the necessary javascript files you'll need to add this `{{ ghostwriter:assets }}` in your footer.

## How to use?
Getting your text moving is simple. Just place the `{{ ghostwriter loop="false" speed="40"}}` tag in the element you want to get moving.

### What options?
There are two options that you can control. 

- **Speed:** This is the typing speed in milliseconds. Example: `loop="false"`
- **Looping:** Do you want the text to loop? Example: `speed="40"`
